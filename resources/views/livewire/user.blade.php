<!-- livewire/user.blade.php -->

<div class="tab-content" id="myTabContent1">
    <div class="tab-pane fade show active" id="direct" role="tabpanel" aria-labelledby="direct-tab">
        <ul class="chat-main">
            @foreach ($userNames as $name)
                <li data-to="blank">
                    <div class="chat-box">
                        <div class="profile offline"><img class="bg-img" src="{{ asset('web/images/contact/1.jpg') }}" alt="Avatar" /></div>
                        <div class="details">
                            <h5>{{ $name }}</h5>
                            <h6>Hi, I am {{ $name }}. How are you.. ! There are many variations of passages.</h6>
                        </div>
                        <div class="date-status"><i class="ti-pin2"></i>
                            <h6>22/10/23</h6>
                            <h6 class="font-success status"> Seen</h6>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- ... (your other tabs) ... -->
</div>
