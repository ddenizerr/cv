<div style="max-width: 600px; margin: 0 auto;">
    <h2>Send Gift Email</h2>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ route('gift.send') }}" method="POST">
        @csrf

        <label>Name 1:</label>
        <input type="text" name="names[]" required><br><br>

        <label>Name 2 (optional):</label>
        <input type="text" name="names[]"><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>
            <input type="checkbox" name="familiar" value="1"> Familiar with Cyprus
        </label><br>

        <label>
            <input type="checkbox" name="honeymoon" value="1"> This is a honeymoon gift
        </label><br><br>

        <button type="submit">Send Email</button>
    </form>
</div>

