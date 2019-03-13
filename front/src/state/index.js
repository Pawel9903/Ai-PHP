import Vue from 'vue';
import Vuex from 'vuex';
import { vector } from "./modules/vector";

Vue.use(Vuex);

export const store = new Vuex.Store({
  modules:{
    vector: vector
  }
});
