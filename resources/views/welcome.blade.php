@foreach ($categories as $category)

 
     <ul>
       <x-category-item :category="$category"/>
     </ul>


  
@endforeach

<h2>Add new sub Category</h2>

<form action="POST">

  <div class="form-group">
      <label for="">Create New Category:</label>
      <input type="text" placeholder="Category Name">
      <label for="">Parent Category:</label>
      <select name="" id="">
            @foreach ($catList as $item)
                  <option value="">{{$item->title}}</option>
            @endforeach
      </select>
     
  </div>
</form>
{{-- 
@foreach ($children as $childrens)
  {{$childrens->post}}

@endforeach --}}