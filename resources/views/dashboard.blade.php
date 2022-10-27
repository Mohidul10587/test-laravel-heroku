<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <h3 style="text-align: center; font-size:30px">{{ Auth::user()->name }}</h3>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead>
                            <th style="text-align: center; padding: 0 20px">Job Id</th>
                            <th style="text-align: center; padding: 0 20px">Folder Name</th>
                            <th style="text-align: center; padding: 0 20px">Job Type</th>
                            <th style="text-align: center; padding: 0 20px">Instruction</th>
                            <th style="text-align: center; padding: 0 20px">Total Image</th>
                            <th style="text-align: center; padding: 0 20px">Amount</th>
                            <th style="text-align: center; padding: 0 20px">Google Drive Link</th>
                            <th style="text-align: center; padding: 0 20px">Deadline Date</th>
                            <th style="text-align: center; padding: 0 20px">Deadline time</th>
                        </thead>
                        <tbody>
                           
                        @foreach($jobs as $job)
                        @if($job->empoyee_name == Auth::user()->name)
                        <tr>
                                <td style="text-align: center;">{{$job->id}}</td>
                                <td style="text-align: center;">{{$job->folder_name}}</td>
                                <td style="text-align: center;">{{$job->job_type}}</td>
                                <td style="text-align: center;"><textarea style="height: 23px; width: 100px;padding-top:0px;">{{$job->instruction}}</textarea></td>
                                <td style="text-align: center;">{{$job->total_image}}</td>
                                <td style="text-align: center;">{{$job->amount}}</td>
                                <td style="text-align: center;"><a href="{{$job->goole_drive_link}}">Link</a></td>
                                <td style="text-align: center;">{{$job->deadline_date}}</td>
                                <td style="text-align: center;">{{$job->deadline_time}}</td>
                            
                        </tr>
                        @endif
                        @endforeach
                        </tbody>

                        
                    </table>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>