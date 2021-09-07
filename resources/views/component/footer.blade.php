<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer">
    <div>
        <div class="container">
            <div class="row">               
                <div class="col-lg-3 col-md-4">
                    <div class="footer-widget">
                    <a href="{{route('pages.index')}}">
                        <img src="{{asset('logo-white-removebg-preview.png')}}" class="img-footer" alt="" /></a>
                        <div class="footer-add text-white">
                            <p>Siliguri, West Bengal, 734001.</p>
                            <p>+91 861-739-4614</p>
                            <p>info@GoGoal.com</p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="footer-widget">
                        <h4 class="widget-title">Company</h4>
                        <ul class="footer-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="{{route('pages.contact')}}">Contact</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Privacy & Plicy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                        
                <div class="col-lg-7">
                    @guest
                        <div class="row" style="align-items: center;">                            
                            <div class="col-lg-9 col-md-4">
                                <div class="footer-widget">
                                    <h4 class="widget-title">Any query?</h4>
                                    <div class="form-group">
                                        <textarea class="form-control simple"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-widget">
                                    <a href="{{route('pages.signin')}}" type="submit" class="btn btn-call-to-act">Submit</a>
                                </div>
                            </div>                                               
                        </div>
                    @else 
                        <form action="" method="post">
                            @csrf
                            <div class="row" style="align-items: center;">                            
                                <div class="col-lg-9 col-md-4">
                                    <div class="footer-widget">
                                        <h4 class="widget-title">Any query?</h4>
                                        <div class="form-group">
                                            <textarea class="form-control simple"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-6">
                                    <div class="footer-widget">
                                        <button type="submit" class="btn btn-call-to-act">Submit</button>
                                    </div>
                                </div>                                               
                            </div>
                        </form> 
                    @endguest                   
                </div>                              
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-6 col-md-6">
                    <p class="mb-0">© 2021 GoGoal Room & Reviews. Designd By All Rights Reserved</p>
                </div>
                
                <div class="col-lg-6 col-md-6 text-right">
                    <ul class="footer-bottom-social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        {{-- <li><a href="#"><i class="ti-twitter"></i></a></li> --}}
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        {{-- <li><a href="#"><i class="ti-linkedin"></i></a></li> --}}
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->