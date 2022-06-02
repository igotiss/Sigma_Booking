<template>
    <div class="card mb-3" >
        <div class="row g-0">
            <div class="col-md-4 stay-image p-2" @click="getTypeStay">
                <img v-if="stay.picture" :src="stay.picture" class="img-fluid rounded-start" :alt="stay.picture.alt">
                <svg v-else class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
            </div>
            <div class="col-md-8">
                <div class="card-body pb-2">
                    <div class="d-flex flex-row justify-content-between align-items-baseline">
                        <h3 class="card-title">{{stay.title}}</h3>
                        <p class="card-text" ><small class="text-muted">Тип помешкання: <strong>{{getTypeStay}}</strong></small></p>
                    </div>
                    <p class="card-text me-2"><small class="text-muted">Локація: <span class="stay-location">{{ stay.location }}</span></small></p>
                    <p class="card-text">{{stay.description}}</p>
                    <h5 class="card-text stay-price">Ціна: <strong> {{stay.price}} грн.</strong></h5>
                    <button class="btn btn-primary mt-3">Забронювати</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "StayCard",
    props: {
        stay: Object
    },
    methods: {

    },
    computed: {
        getTypeStay() {
            switch (this.stay.type) {
                case 'hotel':
                    return 'готель';
                break;
                case 'apartment':
                    return 'апартамент';
                    break;
                case 'resort':
                    return 'курортний готель';
                    break;
                case 'villa':
                    return 'вілла';
                    break;
                case 'cottage':
                    return 'котедж';
                    break;
                default:
                    return 'не визначено'
            }
        }
    }


}
</script>

<style scoped>
.card-title {
    text-transform:capitalize;
    color:blue;
    font-weight: bold;
    cursor: pointer;
}
.card-title:hover {
    color: coral;
}
.stay-location {
    text-transform:capitalize;
    font-weight: bold;
}
.stay-price {
    color: #198754;
}
.stay-image {
    cursor: pointer;
}
</style>
