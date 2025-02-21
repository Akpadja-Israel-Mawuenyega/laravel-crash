<x-app-layout>
    <div class="note-container single-note">
        <h1 class="edit-note-header">Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" class="note" method="POST">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here">{{ $note->note }}</textarea>
            <div class="note-buttons" style="border: none">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
