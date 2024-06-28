<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('addCategory') }}" method="post" >
        @csrf
        <div >
            <label for="name_category" >Название категории</label>
            <input type="text"  id="name_category" name="name_category" required>
        </div>
        <div >
            <button type="submit" >Добавить</button>
        </div>
    </form>
    <form action="{{ route('addProduct') }}" method="post"  enctype="multipart/form-data">
        @csrf
        <div  >
            <label for="name_product"  >Название</label>
            <input type="text"    id="name_product" name="name_product" required>
        </div>
        <div  >
            <label for="model_product"  >Описание</label>
            <input type="text"    id="model_product" name="model_product" required>
        </div>
        <div >
            <label for="id_category"  >Выберите категорию</label>
            <select id="id_category"  name="id_category" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id_category }}">{{ $category->name_category }}</option>
                @endforeach
            </select>
        </div>
        <div  >
            <label for="count_product"  >Количество</label>
            <input type="number"    id="count_product" name="count_product" required>
        </div>
        <div >
            <label for="image"  >Выберите фото для товара</label>
            <input    type="file" id="image" accept="image/*" name="image" required>
        </div>
        <div  >
            <button type="submit" >Добавить</button>
        </div>
    </form>
</body>
</html>