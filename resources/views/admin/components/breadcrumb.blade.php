<h2>{{$title}}</h2>
<ol class="breadcrumb">
  <!-- route - именованный маршрут, формирующий ссылку на главную страницу административной части блога -->
  <li><a href="{{route('admin.index')}}">{{$parent}}</a></li>
  <li class="active">{{$active}}</li>
</ol>
