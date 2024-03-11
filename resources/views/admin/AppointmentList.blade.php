@include('partials.header')
<header class="max-w-lg mx-auto">
    <a href="">
        <h1 class="text-4x1 font-bold text-white text-center">Appointments</h1>
    </a>
</header>
<section>
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text gray-700 uppercase bg-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Course/Track
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Mode of Counsel
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Preferred Counselor Gender
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Appointment Date
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Time
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</section>
@include("partials.footer")