<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
<meta charset="UTF-8">
<title>Laravel 8 CRUD Tutorial From Scratch</title>
<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
<style >
*{
    font-family: Arial, Helvetica;

}

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

{{-- RTL bootstrap --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
 integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> بيانات العملاء   </h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('clients.create') }}"> اضافة عميل </a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>#</th>
<th>رقم الهوية  </th>
<th>الإسم ثلاثي  </th>
<th>رقم الجوال</th>
<th>الجنسية</th>
<th>البريد الاكتروني</th>
<th>كلمة المرور</th>
<th>تأكيد كلمة المرور</th>
<th width="280px">الإجراء</th>
</tr>
@foreach ($clients as $client)
<tr>
<td>{{ $client->id }}</td>
<td>{{ $client->identity_umber }}</td>
<td>{{ $client->full_name }}</td>
<td>{{ $client->phone }}</td>
<td>{{ $client->nationality }}</td>
<td>{{ $client->email }}</td>
<td>{{ $client->password }}</td>
<td>{{ $client->confirm_password }}</td>
<td>
<form action="{{ route('clients.destroy',$client->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}">تعديل</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">حذف</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $clients->links() !!}
</body>
</html>