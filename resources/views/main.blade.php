<x-guest-layout>
    <div class="container">
        <search-panel></search-panel>
        <stays-grid></stays-grid>
        {{--@if($stays->isEmpty())
            <h5>На даний час немає жодного опублікованого помешкання</h5>
        @else
            <h5 class="mt-3">Знайдено помешкань: {{$stays->total()}} </h5>

            @foreach($stays as $stay)
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4 stay-image p-2">
                            <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body pb-2">
                                <div class="d-flex flex-row justify-content-between align-items-baseline">
                                    <h3 class="card-title">{{$stay->title}}</h3>
                                    <p class="card-text" ><small class="text-muted">Тип помешкання: <strong>{{$stay->type}}</strong></small></p>
                                </div>
                                <p class="card-text me-2"><small class="text-muted">Локація: <span class="stay-location">{{ $stay->location }}</span></small></p>
                                <p class="card-text">{{$stay->description}}</p>
                                <h5 class="card-text stay-price">Ціна: <strong> {{$stay->price}} грн.</strong></h5>
                                <div class="input-group mb-3" >
                                    <button
                                            class="btn btn-outline-primary">
                                        Редагувати
                                    </button>
                                    <button class="btn btn-outline-danger"

                                    >Видалити</button>
                                </div>
                                <button  class="btn btn-primary mt-3">Забронювати</button>
                            </div>
                        </div>
                    </div>
                </div>



               --}}{{-- <stay-card
                    :stay="{{json_encode($stay)}}"
                    :auth="false"
                ></stay-card>--}}{{--

            @endforeach
            {{$stays->links()}}
        @endif--}}

    </div>
</x-guest-layout>

<script>
    import StayCard from "../js/components/StayCard";
    import StaysGrid from "../js/components/StaysGrid";
    export default {
        components: {StaysGrid, StayCard}
    }
</script>
