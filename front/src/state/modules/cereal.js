import Vue from 'vue'
import Vuex from 'vuex'
import Env from './../../../config/dev.env';
import Axios from 'axios';

Vue.use(Vuex);

export const cereal = {
  namespaced: true,
  state: {
    cereal:{}
  },
  mutations: {
    SetCereal : (state, payload) => state.cereal = payload,
  },
  getters: {
    GetCereal : (state) => state.cereal
  },
  actions: {
    Cereals : async (context) => {
      let { data } = await Axios.get(Env.ROOT_API+'cereals');
      context.commit('SetCereal',data);
    },
    DeleteCereal : (context, payload) => {
      Axios.delete(Env.ROOT_API+'cereals', payload);
    }
  }
};
