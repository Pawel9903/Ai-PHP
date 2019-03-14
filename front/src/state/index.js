import Vue from 'vue';
import Vuex from 'vuex';
import { vector } from "./modules/vector";
import { cereal } from "./modules/cereal";

Vue.use(Vuex);

export const store = new Vuex.Store({
  modules:{
    vector: vector,
    cereal: cereal
  }
});
