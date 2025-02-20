<x-layout>
  <div class="note-conainer">
    <a href="{{ route("note.create") }}" class="new-note-button">
      New Note
    </a>
    <div class="notes">
      @foreach ($notes as $note)
        <div class="note">
        <div class="note-body">
          {{ Str::words($note->note, 30) }}
        </div>
        <div class="note-buttons">
          <a href="{{ route("note.show", $note) }}" class="note-view-btn">View</a>
          <a href="{{ route("note.edit", $note) }}" class="note-edit-btn">Edit</a>
          <button class="note-delete-btn">Delete</button>
        </div>
      </div>
      @endforeach 
    </div>
  </div>
</x-layout>
