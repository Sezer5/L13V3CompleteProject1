import { defineStore } from 'pinia'
import axios from 'axios'
import { BASE_URL } from '@/helpers/config'

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
            const response = await axios.get(`${BASE_URL}/products`)
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
        const response = await axios.get(`${BASE_URL}/products/${color}/color`)
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
        const response = await axios.get(`${BASE_URL}/products/${size}/size`)
        this.products = response.data.data
        this.colors = response.data.colors
        this.sizes = response.data.sizes
        this.isLoading=false
      } catch (error) {
        console.log(error)
        this.isLoading=false
      }
    },
    async getProductByTerm(term){
      this.isLoading=true
      try {
        const response = await axios.get(`${BASE_URL}/products/${term}/term`)
        this.products = response.data.data
        this.colors = response.data.colors
        this.sizes = response.data.sizes
        this.isLoading=false
      } catch (error) {
        console.log(error)
        this.isLoading=false
      }
    },
    async getProductDetail(product){
      this.isLoading=true
      try {
        const response = await axios.get(`${BASE_URL}/products/${product}/productdetail`)
        this.products = response.data.data
        this.isLoading=false
      } catch (error) {
        console.log(error)
        this.isLoading=false
      }
    }
  },
})