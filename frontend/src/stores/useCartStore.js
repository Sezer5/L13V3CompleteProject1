import { defineStore } from 'pinia'
import axios from 'axios'
import { BASE_URL } from '@/helpers/config'
import { useToast } from 'vue-toastification'


const toast = useToast()

export const useCartStore = defineStore('cart', {
  state: () => ({ 
     cartItems:[],
   }),
  getters: {
    
  },
  actions: {
    addToCart(item){
      let index = this.cartItems.findIndex(product => product.product_id === item.product_id 
                                          && product.color=== item.color 
                                          && product.size===item.size)
      // If same product already exists in the cart
      if(index!==-1){
        toast.success("Product already exists in your cart",{
          timeout:2000
        })
      }else{
        this.cartItems.push(item)
        toast.success("Product added your cart",{
          timeout:2000
        })
      }
    },
    incrementQty(item){
      let index = this.cartItems.findIndex(product => product.product_id === item.product_id 
                                          && product.color=== item.color 
                                          && product.size===item.size)
      // If same product already exists in the cart
      if(index!==-1){
        if(this.cartItems[index].qty === item.maxQty){
          toast.success(`Only ${item.qty} product available`,{
            timeout:2000
          })
        }else{
          this.cartItems[index].qty+=1
        }
    }
    
    
  },
  decrementQty(item){
      let index = this.cartItems.findIndex(product => product.product_id === item.product_id 
                                          && product.color=== item.color 
                                          && product.size===item.size)
      // If same product already exists in the cart
      if(index!==-1){
        this.cartItems[index].qty-=1
        if(this.cartItems[index].qty === 0){
          this.cartItems = this.cartItems.filter(product=>product.ref !== item.ref)
        }
    }
    
    
  },
  removeFromCart(item){
    this.cartItems = this.cartItems.filter(product=>product.ref !== item.ref)
    toast.success(`Product remove to your cart`,{
            timeout:2000
          })
  },
  clearCartItems(){
    this.cartItems=[]
  }
}
})