<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}  
        </h2>
    </x-slot>
<div id="admin-content">
        <div class="container">
            <div class="row">
                <br>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                        <a href="{{route('author.list')}}"><h5 class="card-title mb-2">Authors_listed</h5></a>
                        </div>
                    </div>
                </div>
                </br>
                <br>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                        <a href="{{route('publisher.list')}}"><h5 class="card-title mb-2">Publisher_Listed</h5></a>
                        </div>
                    </div>
                </div>
                </br>
                <br>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                        <a href="{{route('categories.list')}}"><h5 class="card-title mb-2">Categories_Listed</h5></a>
                        </div>
                    </div>
                </div>
                </br>
                <br>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                        <a href="{{route('book.list')}}"><h5 class="card-title mb-2">book_Listed</h5></a>
                        </div>
                    </div>
                </div>
                </br>
                <br>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                        <a href="{{route('bookissue.list')}}"><h5 class="card-title mb-2">bookissue_listed</h5></a>
                        </div>
                    </div>
                </div>
                </br>
                <br>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                        <a href="{{route('student.list')}}"><h5 class="card-title mb-2">student_list</h5></a>
                        </div>
                    </div>
                </div>
                </br>
            </div>
        </div>
</div> 
</x-app-layout>     