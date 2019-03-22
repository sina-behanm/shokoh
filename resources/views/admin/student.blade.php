@extends('layouts.admin')
@section('content')
<style type="text/css">
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
    <h2>لیست دانش اموزان</h2>
                <table>
                    <tr>
                        <th>شماره</th>
                        <th>نام و نام خانوادگی</th>
                        <th>نام پدر</th>
                        <th>کد ملی</th>
                    </tr>
                    @foreach($students as $student)
                        <tr>
                        <td>
                            {{$student->id}}
                        </td>
                        <td>
                            {{$student->name}}
                        </td>
                        <td>
                            {{ $student->family_name }}
                        </td>
                        <td>
                            {{$student->SSN}}
                        </td>
                        </tr>
                    @endforeach
                </table>


@endsection