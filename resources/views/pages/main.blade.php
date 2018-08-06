@extends('template.global')
<!-- Отмена отправки сообщения -->
@section('content')

  <div class="container-fluid">
    <div id="substrate_hello" class="substrate"></div>
    <div id="substrate_projects" class="substrate"></div>
    <div id="substrate_contacts" class="substrate"></div>
    <div id="substrate_feedback" class="substrate"></div>
    <div class="row content d-flex align-items-center">
      <div class="col d-flex justify-content-center">
          <div id="feedback_form">
            <input class="feedback_input" type="" name="phone" placeholder="phone">
          </div>
        <div id="hello" class="square d-flex align-items-center justify-content-center">
          <h1>&lt;hello!&gt;</h1>
        </div>
      </div>
      <div class="col d-flex justify-content-center">
        <div id="feedback_form"> 
          <textarea class="feedback_textarea" name="message" placeholder="message"></textarea>
        </div>
        <div id="projects" class="square d-flex align-items-center justify-content-center">
          <h1>&lt;projects!&gt;</h1>
        </div>
      </div>
      <div class="col d-flex justify-content-center">
        <div id="feedback_form"> 
          <button class="feedback_button" type="button" value="" name="send_button">send</button>
        </div>
        <div id="contacts" class="square d-flex align-items-center justify-content-center">
          <h1>&lt;contacts!&gt;</h1>
          <div id="contacts_col" class="contacts_col text-center">
            <p class="phone glow">7(950)001-32-21</p>
            <p class="mail"><a class="glow" href="mailto:pasha.odoevskiy@gmail.com">pasha.odoevskiy@gmail.com</a></p>
            <p class="link m-0"><a href="https://vk.com/malchik_bananan" target="_blank"><i class="fab fa-vk fa-3x glow"></i></a></p>
          </div>
        </div>
      </div>
      <div id="info_col" class="col-6 info_col">
        <div class="card">
          <div class="front">
            <img src="/public/images/me.jpg" alt="Мое фото">
          </div>
          <div class="back">
            <div class="col-6">
              <span>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dolorum fugiat autem laudantium sed corporis aut cum vero laborum sunt ut nostrum earum tempora, consequuntur totam nesciunt! Repellendus, nemo ratione.
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div id="enter" class="enter"><a href="/enter">&lt;login/registration&gt;</a></div> -->
    <div id="feedback" class="feedback">&lt;contact_with_me&gt;</div>
  </div>

@endsection