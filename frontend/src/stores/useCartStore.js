import { defineStore } from 'pinia'
import axios from 'axios'
import { BASE_URL } from '@/helpers/config'
,
export const useCartStore = defineStore('cart', {
  state: () => ({ 
     product:null,
     productThumbnail:'',
     isLoading:false,
     errorMessage:''
   }),
  getters: {
    
  },
  actions: {
    async getProduct(slug){
      this.isLoading=true
        try {
            const response = await axios.get(`${BASE_URL}/products/${slug}/productdetail`)
            this.product = response.data.data
            this.productThumbnail = response.data.data.thumbnail
            this.isLoading=false
        } catch (error) {
            console.log(error)
            this.isLoading=false
        }
    },
    
    
  },
})