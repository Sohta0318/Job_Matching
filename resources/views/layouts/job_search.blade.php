<x-layout>
  @section('content')
  <div class="job-search-wrap mx-auto">
    <form action="">
        <div class="form-each flex flex-col text-center">
            <label for="keyword">キーワード</label>
            <input type="text">
        </div>
        <div class="form-each flex flex-col text-center">
            <label for="place">勤務地</label>
            <input type="text">
        </div>
        <div class="form-each flex flex-col text-center">
            <input class="bg-blue-800 text-white w-1/4 h-12 mx-auto rounded-sm" type="submit" value="検索">
        </div>   
    </form>
  </div>
  @endsection
</x-layout>