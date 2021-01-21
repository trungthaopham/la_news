@extends('layout')
@section('noidungchinh')
<div class="blog__content mb-72">
    <h1 class="page-title">Liên hệ với chúng tôi</h1>

    <!-- Google Map -->


    <div class="row justify-content-center">
    <div class="col-lg-8">
        <h4>Gửi lời nhắn cho chúng tôi</h4>
        <p>Đừng ngần ngại chúng tôi sẽ trả lời một cách sớm nhất và nhanh nhất!!</p>
        <ul class="contact-items">
        <li class="contact-item"><address>Quận 12, thành phố Hồ Chí Minh</address></li>
        <li class="contact-item"><a href="tel:+1-800-1554-456-123">0967979869</a></li>
        <li class="contact-item"><a href="mailto:themesupport@gmail.com">suport@gmail.com</a></li>
        </ul>

        <!-- Contact Form -->
        <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="#">
        <div class="contact-name">
            <label for="name">Họ và tên:<abbr title="required" class="required">*</abbr></label>
            <input name="name" id="name" type="text">
        </div>
        <div class="contact-email">
            <label for="email">Email: <abbr title="required" class="required">*</abbr></label>
            <input name="email" id="email" type="email">
        </div>
        <div class="contact-subject">
            <label for="email">Điện thoại:</label>
            <input name="subject" id="subject" type="tel">
        </div>
        <div class="contact-subject">
            <label for="email">Tiêu đề:</label>
            <input name="subject" id="subject" type="text">
        </div>
        <div class="contact-message">
            <label for="message">Lời nhắn: <abbr title="required" class="required">*</abbr></label>
            <textarea id="message" name="message" rows="7" required="required"></textarea>
        </div>

        <input type="submit" class="btn btn-lg btn-color btn-button" value="Send Message" id="submit-message">
        <div id="msg" class="message"></div>
        </form>

    </div>
    </div>
</div>
@endsection
