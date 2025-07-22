@extends('welcome')

@section('content')
    <form action="{{ route('gift.preview') }}" method="POST" class="mb-3">
        @csrf
        <div class="mb-3">
            <label for="giftTitle" class="form-label">Gift Title (e.g. Conor & Elena)</label>
            <input type="text" name="giftTitle" id="giftTitle" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="giftMessage" class="form-label">Gift Custom Section Temp</label>
            <textarea name="giftMessage" id="giftMessage" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="isFamiliar" id="isFamiliar" class="form-check-input">
            <label for="isFamiliar" class="form-check-label">They are already familiar with Cyprus</label>
        </div>

        <div class="mb-3">
            <label for="recipients" class="form-label">Recipient Emails (comma-separated)</label>
            <input type="text" name="recipients" id="recipients" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Preview</button>
    </form>

    <form action="{{ route('gift.send') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="giftTitleSend" class="form-label">Gift Title (e.g. Conor & Elena)</label>
            <input type="text" name="giftTitle" id="giftTitleSend" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="giftMessageSend" class="form-label">Gift Custom Section Temp</label>
            <textarea name="giftMessage" id="giftMessageSend" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="isFamiliar" id="isFamiliarSend" class="form-check-input">
            <label for="isFamiliarSend" class="form-check-label">They are already familiar with Cyprus</label>
        </div>

        <div class="mb-3">
            <label for="recipientsSend" class="form-label">Recipient Emails (comma-separated)</label>
            <input type="text" name="recipients" id="recipientsSend" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-danger">Send</button>
    </form>
@endsection
