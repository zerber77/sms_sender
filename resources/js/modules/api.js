import axios from "axios";
import router from "../router";

const api = axios.create();
api.interceptors.request.use(config => {
        if(localStorage.access_token) {
//            config.headers = {'authorization':'Bearer ' + localStorage.access_token}
            config.headers.authorization = `Bearer ${localStorage.access_token}`
        }
        return config
    },
    error=>{
        console.log('ERROR  in api. rejected'+error)
    })

api.interceptors.response.use(config=>{
        if(localStorage.access_token) {
            config.headers.authorization = `Bearer ${localStorage.access_token}`
        }
        return config
    }, error=>{
        if (error.response.data.message === 'Token has expired'){
            axios.post('api/auth/refresh',{},{
                headers: {
                    'authorization':`Bearer ${localStorage.access_token}`
                }
            }).then(res=>{
                localStorage.access_token =  res.data.access_token
                error.config.headers.authorization = `Bearer ${res.data.access_token}`
                return api.request(error.config)
            })
        }
/*        if (error.response.data.message === 'Token not provided'){

        }
        if (error.response.data.message === 'Wrong password or email'){
            alert('Wrong password or email');
        }*/
    return Promise.reject(error);
    })

export default api
