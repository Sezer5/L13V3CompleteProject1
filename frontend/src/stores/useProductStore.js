import { defineStore } from 'pinia'
import axios from 'axios'

export const useProductStore = defineStore('product', {
  state: () => ({ 
     products:[],
     colors:[],
     sizes:[],
     isLoading:false,
     isTerm:null
   }),
  getters: {
    
  },
  actions: {
    async getAllProducts(){
        try {
            const response = await axios.get('http://127.0.0.1:8000/api/products')
            this.products = response.data.data
        } catch (error) {
            console.log(error)
        }
    }
  },
})