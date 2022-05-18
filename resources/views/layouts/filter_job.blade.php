<x-layout>
  @section('content')
<div class="filter-job-form-wrap my-10">
      <form action="{{route('job.store')}}" class="text-center" method="POST">
        @csrf
        <input type="text" placeholder="キーワード" name="keyword" class="w-1/4 rounded-sm">
        <input type="text" placeholder="勤務地" name="place" class="w-1/4 mx-3 rounded-sm">
        <input type="submit" value="検索" class="bg-blue-800 text-white w-1/6 h-12 rounded-sm mx-3 rounded-sm">
</form>
</div>
<div class="filter-job-wrapper px-10 text-left border-2 border-gray-300 w-4/5 mx-auto rounded-lg">
    <div class="job-each border-b-2 border-gray-200 pb-6 px-16 pt-8 ">

            
                <h1 class="text-3xl py-4">会社名</h1>
                <div class="job-flex flex">
                    <div class="job-type flex rounded-md bg-gray-200 text-gray-800 px-2 py-1">
                        <p class="text-xl">勤務形態</p>
                        <p class="text-xl pl-5">正社員</p>
                    </div>
                    <div class="salary flex rounded-md  bg-gray-200 text-gray-800 ml-5 px-2 py-1">
                        <p class="text-xl">給与</p>
                        <p class="text-xl  pl-5">20万〜30万</p>
                    </div>
                </div>
                <div class="detail flex py-5">
                    <p class="text-xl">説明</p>
                    <p class="text-xl pl-5">aaaaaaaaaaaaaaaaaaaaaaaa</p> 
                </div>
    </div>
    
</div>
  @endsection
</x-layout>