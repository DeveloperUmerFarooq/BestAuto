<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border border-primary">
            <div class="modal-header bg-black text-light">
                <h5 class="modal-title" id="appointmentModalLabel">Schedule An Appointment</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark">
                <form id="appointmentForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="fullName" placeholder="John Doe" required>
                                <label for="fullName">Full Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                <label for="email">Email Address</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phone" placeholder="+1 (123) 456-7890" required>
                                <label for="phone">Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="location" required>
                                    <option value="" selected disabled>Select location</option>
                                    <option value="location1">Best Auto Repair & Tire 1</option>
                                    <option value="location2">Best Auto Repair & Tire 2</option>
                                </select>
                                <label for="location">Preferred Location</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="vehicle" placeholder="Toyota Camry" required>
                                <label for="vehicle">Vehicle Make/Model</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="datetime-local" class="form-control" id="appointmentDate" required>
                                <label for="appointmentDate">Preferred Date</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select" id="service" required>
                                    <option value="" selected disabled>Select a service</option>
                                    <option value="oil-change">Oil Change</option>
                                    <option value="tire-rotation">Tire Rotation</option>
                                    <option value="brake-service">Brake Service</option>
                                    <option value="engine-diagnostic">Engine Diagnostic</option>
                                    <option value="other">Other Service</option>
                                </select>
                                <label for="service">Service Needed</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave your message here" id="message" style="height: 120px"></textarea>
                                <label for="message">Additional Details</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" form="appointmentForm" class="btn btn-primary">
                            <i class="fas fa-calendar-check me-2"></i> Book Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
