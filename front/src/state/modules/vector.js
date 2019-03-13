import Vue from 'vue'
import Vuex from 'vuex'
import Env from './../../../config/dev.env';
import Axios from 'axios';

Vue.use(Vuex);

export const vector = {
  namespaced: true,
  state: {
    vector:{
      vectorRepeat: []
    }
  },
  mutations: {
    SetVectors : (state, payload) => state.vector = payload,
    SetVectorRepeat : (state, payload) => state.vector.vectorRepeat = payload
  },
  getters: {
    GetVectors : (state) => state.vector
  },
  actions: {
    VectorRepeat : async (context) => {
      let { data } = await Axios.get(Env.ROOT_API+'vectors/repeat');
      context.commit('SetVectorRepeat',data);
    }
  }
};
