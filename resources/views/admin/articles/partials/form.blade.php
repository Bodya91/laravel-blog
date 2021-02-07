<label for="">State</label>
<select name="published" id="published" class="form-control">
    @if(isset($article->id))
        <option value="0" @if($article->published == 0) selected="" @endif>Draft</option>
        <option value="1" @if($article->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Draft</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Title</label>
<input class="form-control" type="text" name="title" placeholder="Article name" value="{{ $article->title ?? "" }}" required>

<label for="">Slug (unique)</label>
<input class="form-control" type="text" name="slug" placeholder="Article slug" value="{{ $article->slug ?? "" }}" readonly="">

<label for="">Parent category</label>
<select name="categories[]" multiple="" class="form-control">
    <option value="0">-- no parent article</option>
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Short description</label>
<textarea name="description_short" id="description_short" class="ckeditor form-control">{{$article->description_short ?? ""}}</textarea>

<label for="">Full description</label>
<textarea name="description" id="description" class="ckeditor form-control">{{$article->description ?? ""}}</textarea>

<hr>

<label for="">Meta title</label>
<input class="form-control" type="text" name="meta_title" placeholder="Meta Title" value="{{ $article->meta_title ?? "" }}" required>

<label for="">Meta description</label>
<input class="form-control" type="text" name="meta_description" placeholder="Meta description" value="{{ $article->meta_description ?? "" }}" required>

<label for="">Meta keywords</label>
<input class="form-control" type="text" name="meta_keyword" placeholder="Meta keywords" value="{{ $article->meta_keyword ?? "" }}" required>

<hr>

<input class="btn btn-primary" type="submit" name="some_name" value="Save">