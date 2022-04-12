<form action="{{ route('kutya.destroy', $kutyaId) }}" method="POST" style="display: inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-secondary">Törlés</button>
</form>
