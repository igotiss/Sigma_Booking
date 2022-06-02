<x-guest-layout>
    <div class="container">
        <search-panel> </search-panel>
        @if($stays->isEmpty())
            <h5>На даний час немає жодного опублікованого помешкання</h5>
        @else
            <h5 class="mt-3">Знайдено помешкань: {{$stays->total()}} </h5>

            @foreach($stays as $stay)
                <stay-card
                    :stay="{{json_encode($stay)}}"
                ></stay-card>

            @endforeach
            {{$stays->links()}}
        @endif

    </div>
</x-guest-layout>

