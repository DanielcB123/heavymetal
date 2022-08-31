import { defineStore } from "pinia";
import axios from 'axios';

export const ClientStore = defineStore("client", {
    state: () => ({
        clients: [],
        numtoload: 15,
        filter: '',
    }),
    getters: {
        getClient: (state) => {
            return state.clients;
        },
     
    },
    actions: {
        async fetchClients(){
                console.log("test api array -> " , this.clients);
                //  console.log("length", this.client.length);
                 axios
                    .post('http://localhost:8000/api/client/client-search')
                    .then((result) => { 
                        this.clients = result.data;
                    })   
        },
    }
});