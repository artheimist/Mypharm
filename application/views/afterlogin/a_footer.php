 <!-- Footer Start -->
 <section id="footer">
   <footer class="container py-5">
     <div class="row">
       <div class="col-12 col-md">
         <img class="mb-2" src="<?= base_url('assets'); ?>/img/Logo Navbar.png" width="180" height="auto" alt="" />
         <small class="d-block mb-3 text-muted">&copy; 2019–2021</small>
       </div>
       <div class="col-6 col-md">
         <h5>Contact Info</h5>
         <ul class="list-unstyled text-small">
           <li class="list-item" href="#">Call Us Free - 24/7</li>
           <li style="color: #3682f4; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700" class="list-item mt-1" href="#">3200 421 000</li>
           <li class="list-item" href="#">221 Makassar Road,<br />Street 46, Makassar</li>
         </ul>
       </div>
       <div class="col-6 col-md">
         <h5>Information</h5>
         <ul class="list-unstyled text-small">
           <li><a class="link-secondary" href="#">About Us</a></li>
           <li><a class="link-secondary" href="#">My Account</a></li>
           <li><a class="link-secondary" href="#">Privacy Policies</a></li>
           <li><a class="link-secondary" href="#">Terms & Conditions</a></li>
           <li><a class="link-secondary" href="#">Customer Service</a></li>
         </ul>
       </div>
       <div class="col-6 col-md">
         <h5>Quick Action</h5>
         <ul class="list-unstyled text-small">
           <li><a class="link-secondary" href="#">Special Offers</a></li>
           <li><a class="link-secondary" href="#">Payment Method</a></li>
           <li><a class="link-secondary" href="#">Terms of Use</a></li>
           <li><a class="link-secondary" href="#">Track Your Order</a></li>
         </ul>
       </div>
     </div>
   </footer>
 </section>
 <!-- Footer End -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="<?= base_url('assets/js/libary.js') ?>"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script>
   var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
   var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
     return new bootstrap.Tooltip(tooltipTriggerEl)
   })
 </script>
 </body>

 </html>