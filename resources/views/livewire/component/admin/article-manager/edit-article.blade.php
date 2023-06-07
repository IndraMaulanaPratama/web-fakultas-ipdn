<div>
  {{-- Close your eyes. Count to one. That is how long forever feels. --}}
  <form wire:submit.prevent="AddNew">
      <div class="row">

          {{-- Editor Area --}}
          <div class="col-md-8">
              <div class="accordion w-100" id="accordion1">
                  <div class="card shadow">
                      <div class="card-header" id="heading1">
                          <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                              aria-expanded="false" aria-controls="collapse1">
                              <strong>{{ __('Formulir Pembuatan Artikel') }}</strong>
                          </a>
                      </div>

                      <div class="card-body">

                          <div class="row">
                              <div class="col-md-12">

                                  <div class="form-group">
                                      <input type="text" wire:model='inputJudul' class="form-control col-md-6"
                                          placeholder="Judul Artikel" required>
                                  </div>

                                  <div class="form-group">
                                      <textarea name="" id="inputContent" class="form-control rounded-sm"></textarea>
                                  </div>

                                  <div class="form-group">
                                      <button type="button" class="btn btn-secondary">Simpan</button>
                                      <button type="button" class="btn btn-primary">Tayangkan</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          {{-- Category Area --}}
          <div class="col-md-4">
              <div class="accordion w-100" id="accordion1">

                  <div class="grid grid-cols-1">

                      {{-- Action Option --}}
                      <div class="">
                          <div class="form-group">
                              <button type="button" class="btn btn-primary">Simpan</button>
                              &nbsp;
                              <button type="button" class="btn btn-info">Tayangkan</button>
                          </div>
                      </div>

                      {{-- Select Category --}}
                      <div class="card shadow">
                          <div class="card-header" id="heading1">
                              <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                                  aria-expanded="false" aria-controls="collapse1">
                                  <strong>{{ __('Pilihan Kategori') }}</strong>
                              </a>
                          </div>

                          <div class="card-body">

                              <div class="row">
                                  <div class="col-md-12">

                                      <div class="form-group">
                                          <select wire:model='inputCategory' class="form-control">
                                              <option value="">Pilih Kategori</option>
                                              <option value="">Ikeh</option>
                                              <option value="">Ikeh</option>
                                              <option value="">Kimochi</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      {{-- Divider --}}
                      <div class="">&nbsp;</div>

                      {{-- Thumbnails --}}
                      <div class="card shadow">
                          <div class="card-header" id="heading1">
                              <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                                  aria-expanded="false" aria-controls="collapse1">
                                  <strong>{{ __('Gambar Keluku/') }}<i>Thumbnail</i></strong>
                              </a>
                          </div>

                          <div class="card-body">

                              <div class="row">
                                  <div class="col-md-12">

                                      <div class="form-group">
                                          <input type="file" wire:model='inputThumbnail'
                                              class="form-control form-input">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </form>
</div>
