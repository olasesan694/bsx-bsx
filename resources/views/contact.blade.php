@extends('layouts.contact.head')

@section('content')
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-7">
                    <div class="feature-box">
                        <h2>Fill out the form and we’ll get back to you in a few.</h2>
                        <p>General Questions or Concerns. Reach Sales or Request Phone #.</p>
                        <form action="contactInc.php" method="POST">
                            <input type = "text" maxlength = "40" name = "fullName" autocomplete = "off" id = "businessTextboxes" placeholder = "Full name" required>
                            <br>
                            <br>
                            <input type = "email" name = "email" autocomplete = "off" id = "businessTextboxes" placeholder = "Your Email" required>
                            <br>
                            <br>
                            <input type = "text" name = "subject" autocomplete = "off" id = "businessTextboxes" placeholder = "Subject" >
                            <br>
                            <br>
                            <textarea rows="3" cols="25" name = "message" id = "businessTextboxes" placeholder="Message..."></textarea>
                            <br>
                            <br>
                            <button type="submit" name="contact_button" class = "forgotPwdButton">Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="footer">
        <div class="container">
            <p class="copyright"> &copy; brisebox 2020 </p>
        </div>
    </section>
@endsection