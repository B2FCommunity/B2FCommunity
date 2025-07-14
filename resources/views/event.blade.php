@extends('layouts.app')

@section('title', 'Event')

@section('content')
    <div class="container-xxl py-5" id="team">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <h1 class="display-5 mb-5">Event Page</h1>
            </div>

            <div class="row g-4">
                {{-- @include('event-card.2025') --}}
                <p class="text-center text-muted">Belum ada event</p>
            </div>
        </div>
    </div>

    {{-- =============================================== --}}
    {{--         STRUKTUR MODAL (CUKUP SATU)           --}}
    {{-- =============================================== --}}
    <div class="modal fade" id="eventDetailModal" tabindex="-1" aria-labelledby="eventDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="modalPoster" src="" class="img-fluid rounded w-100" alt="Poster Event">
                        </div>
                        <div class="col-md-6">
                            <h5>Deskripsi</h5>
                            <p id="modalDescription"></p>
                            <hr>
                            <small class="text-muted">
                                Dibuat pada: <span id="modalCreatedAt"></span><br>
                                Diperbarui pada: <span id="modalUpdatedAt"></span>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a id="modalLink" href="#" class="btn btn-primary" target="_blank">Kunjungi Tautan</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
{{-- =============================================== --}}
{{--           JAVASCRIPT UNTUK MODAL              --}}
{{-- =============================================== --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const eventModal = new bootstrap.Modal(document.getElementById('eventDetailModal'));
        const detailButtons = document.querySelectorAll('.detail-btn');

        detailButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const eventDataElement = this.closest('.team-item').querySelector('.event-data');

                const posterSrc = eventDataElement.dataset.posterSrc;
                const title = eventDataElement.dataset.title;
                const description = eventDataElement.dataset.description;
                const createdAt = eventDataElement.dataset.createdAt;
                const updatedAt = eventDataElement.dataset.updatedAt;
                const link = eventDataElement.dataset.link;

                document.getElementById('modalPoster').src = posterSrc;
                document.getElementById('modalTitle').textContent = title;
                document.getElementById('modalDescription').textContent = description;
                document.getElementById('modalCreatedAt').textContent = createdAt;
                document.getElementById('modalUpdatedAt').textContent = updatedAt;
                document.getElementById('modalLink').href = link;

                eventModal.show();
            });
        });
    });
</script>
@endpush