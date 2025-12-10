@extends('layouts.web')
@section('content')
    <section class="hero-modern py-5">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="pill-label mb-3 d-inline-flex align-items-center">
                        <i class="fas fa-envelope-open-text me-2"></i> Contact Us
                    </span>
                    <h1 class="display-4 fw-bold text-white lh-tight">We'd love to hear from you.</h1>
                    <p class="lead text-light opacity-75 mt-3">
                        Ask questions, share ideas, or collaborate with our departments. We respond quickly.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mt-4 hero-stats">
                        <div class="stat-chip">
                            <i class="fas fa-clock"></i>
                            <span>Prompt replies</span>
                        </div>
                        <div class="stat-chip">
                            <i class="fas fa-user-friends"></i>
                            <span>Supportive team</span>
                        </div>
                        <div class="stat-chip">
                            <i class="fas fa-shield-alt"></i>
                            <span>Secure submissions</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="video-card">
                        <h5 class="fw-bold mb-2 text-dark">Visit us at Mwenge Catholic University</h5>
                        <p class="text-muted mb-3">P.O. Box 1226, Moshi, Kilimanjaro</p>
                        <div class="map-embed rounded mb-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.1936153681027!2d37.32347790000001!3d-3.302208199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1839df349756f46f%3A0x611a580d0cca73ed!2sMwenge%20Catholic%20University!5e0!3m2!1sen!2stz!4v1687271316323!5m2!1sen!2stz"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="chip chip-soft"><i class="fa fa-phone me-1"></i> +255-27-2974 110</span>
                            <span class="chip chip-soft"><i class="fa fa-envelope me-1"></i> example@mail.com</span>
                            <span class="chip chip-soft"><i class="fa fa-headset me-1"></i> Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-shell py-5" id="contact">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-md-6">
                    <div class="form-modern">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="fw-bold text-dark mb-0">Send a message</h3>
                            <span class="pill-label">We typically reply within a day</span>
                        </div>
                        <form method="POST" action="{{ route('message') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="form-group mb-3">
                                <label class="mb-2 fw-semibold" for="fullname">Name</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Enter your fullname"
                                    value="{{ old('fullname') }}">
                                <div class="text-danger">
                                    @error('fullname')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2 fw-semibold" for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                    value="{{ old('email') }}">
                                <div class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2 fw-semibold" for="email">Message Department Category</label>
                                <select name="category" id="category" class="form-select @error('category') is-invalid @enderror">
                                    <option value="programming">Programming</option>
                                    <option value="cyber_security">Cyber Security</option>
                                    <option value="networking">Networking</option>
                                    <option value="graphics_designing">Graphics Designing</option>
                                </select>
                                <div class="text-danger">
                                    @error('category')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2 fw-semibold" for="message">Message</label>
                                <textarea class="form-control" name="message" rows="5" placeholder="Tell us how we can help">{{ old('message') }}</textarea>
                                <div class="text-danger">
                                    @error('message')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-modern mt-2">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="side-card h-100">
                        <h4 class="fw-bold text-dark mb-3">M-ICT Club Address</h4>
                        <div class="d-flex flex-column gap-2 text-muted">
                            <span><i class="fas fa-map-marker-alt colorIcon me-2"></i>P.O. Box 1226, Moshi, Kilimanjaro</span>
                            <span><i class="fa fa-phone colorIcon me-2"></i>Tel: +255-27-2974 110</span>
                            <span><i class="fa fa-envelope colorIcon me-2"></i>example@mail.com</span>
                            <span><i class="fa fa-fax colorIcon me-2"></i>Fax: +255-27-2974108</span>
                            <span><i class="fa fa-headset colorIcon me-2"></i>Customer Support</span>
                        </div>
                        <div class="mt-4">
                            <h6 class="fw-bold text-dark">Stay connected</h6>
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="chip chip-soft"><i class="fab fa-twitter me-1"></i> @ICTClub</span>
                                <span class="chip chip-soft"><i class="fab fa-facebook-f me-1"></i> ICT Club</span>
                                <span class="chip chip-soft"><i class="fab fa-whatsapp me-1"></i> Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
