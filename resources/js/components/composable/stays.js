import { ref } from 'vue'
import axios from "axios";

export default function  useStays() {
    const stays = ref ([])

    const getStays =  async ()  => {
        let response  = await axios.get('/api/stays')
        stays.value  = response.data;
    }
    return {
        stays,
        getStays
    }
}
