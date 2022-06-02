<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{route('stays.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Назва помешкання</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="type">Тип помешкання</label>
                            <select class="form-select mb-3 mt-2 " name="type" required>
                                <option selected disabled>Оберіть із списку</option>
                                <option value="hotel">Готель</option>
                                <option value="apartment">Апартамент</option>
                                <option value="resort">Курорт</option>
                                <option value="villa">Вілла</option>
                                <option value="cottage">Котедж</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="location" class="form-label">Локація (населений пункт)</label>
                            <input type="text" name="location" class="form-control" id="location" value="{{old('location')}}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="price" class="form-label">Вкажіть бажану ціну ренти за добу</label>
                            <input type="number" name="price" class="form-control" id="location" value="{{old('price')}}" required>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="description" class="form-label">Опис помешкання</label>
                        <textarea name="description" class="form-control">{{old('description')}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Створити</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
