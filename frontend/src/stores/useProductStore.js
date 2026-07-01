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
      this.isLoading=true
        try {
            const response = await axios.get('http://127.0.0.1:8000/api/products')
            this.products = response.data.data
            this.colors = response.data.colors
            this.sizes = response.data.sizes
            this.isLoading=false
        } catch (error) {
            console.log(error)
            this.isLoading=false
        }
    },
    async getProductByColor(color){
      this.isLoading=true
      try {
        const response = await axios.get(`http://127.0.0.1:8000/api/products/${color}/color`)
        this.products = response.data.data
        this.colors = response.data.colors
        this.sizes = response.data.sizes
        this.isLoading=false
      } catch (error) {
        console.log(error)
        this.isLoading=false
      }
    },
    async getProductBySize(size){
      this.isLoading=true
      try {
        const response = await axios.get(`http://127.0.0.1:8000/api/products/${size}/size`)
        this.products = response.data.data
        this.colors = response.data.colors
        this.sizes = response.data.sizes
        this.isLoading=false
      } catch (error) {
        console.log(error)
        this.isLoading=false
      }
    }
  },
})