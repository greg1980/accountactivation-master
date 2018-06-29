
@extends('layouts.pages')

  @section('content')
    

    <div class="page-header">
      <h1 class="bg-success">Contact  <small>Us </small></h1>
    </div>
   
      <div class="col-md-10">
          <h3>Enter your message below</h3>
          

    </div>


    <div class="col-lg-9 offset3">
                <form role="form" method="post" action="contact.php">
            <div class="form-group">
              <label for="name" class="control-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="e.g. John Doe"
                   value="<?php echo isset( $fields['name'] ) ? _e( $fields['name'] ) : '' ?>">
            </div>
            <div class="form-group">
              <label for="email" class="control-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="e.g. example@domain.com"
                  value="<?php echo isset( $fields['email'] ) ? _e( $fields['email'] ) : '' ?>">
            </div>
            <div class="form-group">
              <label for="message" class="control-label">Message</label>
              <textarea class="form-control" rows="4" name="message"><?php echo isset( $fields['message'] ) ? _e( $fields['message'] ) : '' ?></textarea>
            </div>
            <div class="form-group">
              <label for="human" class="control-label">5 + 2 = ?</label>
              <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            </div>
            <div class="form-group">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
            </div>
          </form>

    </div>
    

           
    @endsection