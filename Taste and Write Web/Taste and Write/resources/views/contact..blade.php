@extends('templates/main')

@section('content')
    <section id="contactme">
        <div class="contact-form form-part contact-part2">
            <h2 class="talk">Let's Talk</h2>
            <p class="fp">
                Please don't forget to fill in your personal information below first!!!
            </p>
            <form action="mailto:kindlygalih15@gmail.com" method="post" enctype="text/plain" target="_blank">
                <div class="first-column">
                    <div class="first-row">
                        <label>First Name</label>
                        <input type="text" name="First Name" id="Name" class="inp-1 input-con"
                            placeholder="Enter your first name" />
                        <label> Email Id</label>
                        <input type="email" name="Email" id="Email" class="inp-2 input-con"
                            placeholder="Enter your email id " />
                    </div>
                    <div class="second-row">
                        <label>Last Name</label>
                        <input type="text" name="Last Name" id="First Name" class="inp-3 input-con"
                            placeholder="Enter your last name" />
                        <label>Mobile No.</label>
                        <input type="number" name="Mobile No." id="Mobile NO." class="inp-4 input-con"
                            placeholder="Enter your mobile no." />
                    </div>
                </div>
                <div class="big-inp">
                    <label>Restaurant</label>
                    <input type="text" name="restaurant" id="restaurant" class="inp-5 input-con"
                        placeholder="Select Restaurant" />
                </div>
                <div class="last-row">
                    <div class="last-column">
                        <label>Date</label>
                        <input type="date" name="date" id="date" class="inp-6 input-con" />
                    </div>
                    <div class="last-column">
                        <label>Time</label>
                        <input type="time" name="Time" id="Time" class="inp-7 input-con" />
                    </div>
                </div>
                <div class="submit fp-submit">
                    <button type="submit" class="submit-btn">
                        Submit <i class="fa-solid fa-arrow-up sub-arrow"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="right-dog contact-dog">
            <img src="{{ asset('img/images/contact-dog-img.png') }}" alt="" />
        </div>
    </section>
@endsection
