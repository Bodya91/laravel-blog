<label for="">State</label>
<select name="published" id="published" class="form-control">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif>Draft</option>
        <option value="1" @if($category->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Draft</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Name</label>
<input class="form-control" type="text" name="title" placeholder="Category name" value="{{ $category->title ?? "" }}" required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Category slug" value="{{ $category->slug ?? "" }}" readonly="">

<label for="">Parent category</label>
<select name="parent_id" id="parent_id" class="form-control">
    <option value="0">-- no parent category</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr>

<input class="btn btn-primary" type="submit" name="some_name" value="Save">