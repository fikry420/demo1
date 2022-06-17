@extends('layout.master')

@section('content')
<div class="row chat-wrapper">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="row position-relative">
          <div class="col-lg-4 chat-aside border-end-lg">
            <div class="aside-content">
              <div class="aside-header">
                <div class="d-flex justify-content-between align-items-center pb-2 mb-2">
                  <div class="d-flex align-items-center">
                    <div>
                    <H6>data asset</H6>
                    </div>
                  </div>
                <form class="search-form">
                  <div class="input-group">
                    <div class="input-group-text">
                      <i data-feather="search" class="icon-md cursor-pointer"></i>
                    </div>
                    <input type="text" class="form-control" id="searchForm" placeholder="Search here...">
                  </div>
                </form>
              </div>
              <div class="aside-body">
                <ul class="nav nav-tabs nav-fill mt-3" role="tablist">
                  <li class="nav-item">
                  </li>
                  <li class="nav-item">                   
                  </li>
                  <li class="nav-item">                 
                  </li>
                </ul>
                <div class="tab-content mt-3">
                  <div class="tab-pane fade show active" id="chats" role="tabpanel" aria-labelledby="chats-tab">                  
                  </div>
                  <div class="tab-pane fade" id="calls" role="tabpanel" aria-labelledby="calls-tab">
                    <p class="text-muted mb-1">Recent calls</p>
                    <ul class="list-unstyled chat-list px-1">
                      <li class="chat-item pe-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 me-2">
                            <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="user">
                            <div class="status online"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                            <div>
                              <p class="text-body">Jensen Combs</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-up-right" class="icon-sm text-success me-1"></i>
                                <p class="text-muted tx-13">Today, 03:11 AM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="phone-call" class="text-primary icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pe-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 me-2">
                            <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                            <div>
                              <p class="text-body">Leonardo Payne</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-down-left" class="icon-sm text-success me-1"></i>
                                <p class="text-muted tx-13">Today, 11:41 AM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="video" class="text-primary icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pe-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 me-2">
                            <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                            <div>
                              <p class="text-body">Carl Henson</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-down-left" class="icon-sm text-danger me-1"></i>
                                <p class="text-muted tx-13">Today, 04:24 PM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="phone-call" class="text-primary icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pe-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 me-2">
                            <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="user">
                            <div class="status online"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                            <div>
                              <p class="text-body">Jensen Combs</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-down-left" class="icon-sm text-danger me-1"></i>
                                <p class="text-muted tx-13">Today, 12:53 AM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="video" class="text-primary icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pe-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 me-2">
                            <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="user">
                            <div class="status online"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                            <div>
                              <p class="text-body">John Doe</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-down-left" class="icon-sm text-success me-1"></i>
                                <p class="text-muted tx-13">Today, 01:42 AM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="video" class="text-primary icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pe-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 me-2">
                            <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                            <div>
                              <p class="text-body">John Doe</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-up-right" class="icon-sm text-success me-1"></i>
                                <p class="text-muted tx-13">Today, 12:01 AM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="phone-call" class="text-primary icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <p class="text-muted mb-1">Contacts</p>
                    <ul class="list-unstyled chat-list px-1">
                      <li class="chat-item pe-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 me-2">
                            <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                            <div>
                              <p class="text-body">Amiah Burton</p>
                              <div class="d-flex align-items-center">
                                <p class="text-muted tx-13">Front-end Developer</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-end text-body">
                              <i data-feather="message-square" class="icon-md text-primary me-2"></i>
                              <i data-feather="phone-call" class="icon-md text-primary me-2"></i>
                              <i data-feather="video" class="icon-md text-primary"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pe-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 me-2">
                            <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="user">
                            <div class="status online"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                            <div>
                              <p class="text-body">John Doe</p>
                              <div class="d-flex align-items-center">
                                <p class="text-muted tx-13">Back-end Developer</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-end text-body">
                              <i data-feather="message-square" class="icon-md text-primary me-2"></i>
                              <i data-feather="phone-call" class="icon-md text-primary me-2"></i>
                              <i data-feather="video" class="icon-md text-primary"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pe-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 me-2">
                            <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                            <div>
                              <p class="text-body">Yaretzi Mayo</p>
                              <div class="d-flex align-items-center">
                                <p class="text-muted tx-13">Fullstack Developer</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-end text-body">
                              <i data-feather="message-square" class="icon-md text-primary me-2"></i>
                              <i data-feather="phone-call" class="icon-md text-primary me-2"></i>
                              <i data-feather="video" class="icon-md text-primary"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pe-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 me-2">
                            <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                            <div>
                              <p class="text-body">John Doe</p>
                              <div class="d-flex align-items-center">
                                <p class="text-muted tx-13">Front-end Developer</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-end text-body">
                              <i data-feather="message-square" class="icon-md text-primary me-2"></i>
                              <i data-feather="phone-call" class="icon-md text-primary me-2"></i>
                              <i data-feather="video" class="icon-md text-primary"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 chat-content">
            <div class="chat-header border-bottom pb-2">
              <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                  <i data-feather="corner-up-left" id="backToChatList" class="icon-lg me-2 ms-n2 text-muted d-lg-none"></i>
                  <figure class="mb-0 me-2">
                    <img src="{{ url('https://via.placeholder.com/43x43') }}" class="img-sm rounded-circle" alt="image">
                    <div class="status online"></div>
                    <div class="status online"></div>
                  </figure>
                  <div>
                    <p>Mariana Zenha</p>
                    <p class="text-muted tx-13">Front-end Developer</p>
                  </div>
                </div>
                <div class="d-flex align-items-center me-n1">
                  <a href="#">
                    <i data-feather="video" class="icon-lg text-muted me-3" data-bs-toggle="tooltip" title="Start video call"></i>
                  </a>
                  <a href="#">
                    <i data-feather="phone-call" class="icon-lg text-muted me-0 me-sm-3" data-bs-toggle="tooltip" title="Start voice call"></i>
                  </a>
                  <a href="#" class="d-none d-sm-block">
                    <i data-feather="user-plus" class="icon-lg text-muted" data-bs-toggle="tooltip" title="Add to contacts"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="chat-body">
              <ul class="messages">
                <li class="message-item friend">
                  <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <span>8:12 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item me">
                  <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                      </div>
                    </div>
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum.</p>
                      </div>
                      <span>8:13 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item friend">
                  <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <span>8:15 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item me">
                  <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                      </div>
                      <span>8:15 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item friend">
                  <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <span>8:17 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item me">
                  <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                      </div>
                    </div>
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum.</p>
                      </div>
                      <span>8:18 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item friend">
                  <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <span>8:22 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item me">
                  <img src="{{ url('https://via.placeholder.com/37x37') }}" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                      </div>
                      <span>8:30 PM</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="chat-footer d-flex">
              <div>
                <button type="button" class="btn border btn-icon rounded-circle me-2" data-bs-toggle="tooltip" title="Emoji">
                  <i data-feather="smile" class="text-muted"></i>
                </button>
              </div>
              <div class="d-none d-md-block">
                <button type="button" class="btn border btn-icon rounded-circle me-2" data-bs-toggle="tooltip" title="Attatch files">
                  <i data-feather="paperclip" class="text-muted"></i>
                </button>
              </div>
              <div class="d-none d-md-block">
                <button type="button" class="btn border btn-icon rounded-circle me-2" data-bs-toggle="tooltip" title="Record you voice">
                  <i data-feather="mic" class="text-muted"></i>
                </button>
              </div>
              <form class="search-form flex-grow-1 me-2">
                <div class="input-group">
                  <input type="text" class="form-control rounded-pill" id="chatForm" placeholder="Type a message">
                </div>
              </form>
              <div>
                <button type="button" class="btn btn-primary btn-icon rounded-circle">
                  <i data-feather="send"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('custom-scripts')
  <script src="{{ asset('assets/js/chat.js') }}"></script>
@endpush