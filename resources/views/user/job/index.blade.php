<x-layout>
  @section('content')
<h1>Jobs</h1>
<table class="table-auto">
  <thead>
    <tr>
      <th class="px-4 py-2">会社名</th>
      <th class="px-4 py-2">場所</th>
      <th class="px-4 py-2">勤務時間</th>
      <th class="px-4 py-2">給料</th>
      <th class="px-4 py-2">雇用状態</th>
      <th class="px-4 py-2">詳細</th>
      <th class="px-4 py-2">サイト</th>
      <th class="px-4 py-2">電話番号</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($responseBody->results as $data )
      <tr>
        <th class="border px-4 py-2">{{$data->title}}</th>
        <th class="border px-4 py-2">{{$data->workLocationPrefecture.$data->workLocationCity}}</th>
        <th class="border px-4 py-2">
          @if ($data->workingTimeStart == null || $data->workingTimeEnd == null)
            未定
            @else
            {{$data->workingTimeStart.' ~ '. $data->workingTimeEnd}}</th>
          @endif
        <th class="border px-4 py-2">{{$data->salaryMax.'円 ~ '.$data->salaryMin.'円'}}</th>
        <th class="border px-4 py-2">{{$data->employmentTypeNote}}</th>
        <th class="border px-4 py-2">{{Str::limit($data->description,20)}}</th>
        <th class="border px-4 py-2">{{$data->title}}</th>
        <th class="border px-4 py-2"><a href="{{$data->receptionUrl}}" target="_blank">サイト</a></th>
        <th class="border px-4 py-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          <a href="{{$data->receptionForm}}" target="_blank">応募する</a>
        </button></th>
      </tr>
    @endforeach
  </tbody>
</table>
  @endsection
</x-layout>