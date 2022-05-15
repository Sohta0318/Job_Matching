<x-layout>
  @section('content')
<div class="filter-job-form-wrap my-10">
    <form action="" class="text-center">
        <input type="text" value="キーワード" class="w-1/3 ">
        <input type="text" value="勤務地" class="w-1/3 mx-3">
        <input type="submit" value="検索" class="bg-blue-800 text-white w-1/4 h-12 rounded-sm mx-3">
    </form>
</div>
<div class="filter-job-table px-32 text-left border-2 border-gray-300">
    <div class="table-each border-b-2 border-gray-200 pb-10">
    <table>
        <tr>
            <th class="text-2xl py-5">会社名</th>
        </tr>
        <tr>
            <th class="text-xl pb-3">勤務形態</th>
            <td class="text-xl pl-10 pb-3">正社員</td>
        </tr>
        <tr>
            <th class="text-xl pb-3">給与</th>
            <td class="text-xl pl-10 pb-3">20万円〜３０万円</td>
        </tr>
        <tr>
            <th class="text-x pb-3l">説明</th>
            <td class="text-xl pl-10 pb-3">aaaaaaaaaaaaaaaaaaaaaaaa</td>
        </tr>
    </table>
    </div>
    <div class="table-each border-b-2 border-gray-200 pb-10">
    <table>
        <tr>
            <th class="text-2xl py-5">会社名</th>
        </tr>
        <tr>
            <th class="text-xl pb-3">勤務形態</th>
            <td class="text-xl pl-10 pb-3">正社員</td>
        </tr>
        <tr>
            <th class="text-xl pb-3">給与</th>
            <td class="text-xl pl-10 pb-3">20万円〜３０万円</td>
        </tr>
        <tr>
            <th class="text-x pb-3l">説明</th>
            <td class="text-xl pl-10 pb-3">aaaaaaaaaaaaaaaaaaaaaaaa</td>
        </tr>
    </table>
    </div>
</div>
  @endsection
</x-layout>