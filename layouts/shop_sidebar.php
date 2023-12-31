<style>
    .categorySideBar .module-categories>.well>ul.nav li.showDropCat>a.currentActiveCategory+ul.nav {
        display: flex !important;
    }

    .categorySideBar .module-categories>.well>ul.nav li.currentParents>ul.currentParents {
        display: flex !important;
        height: auto !important;
        left: 0;
    }

    .sidebar__widget p {
        line-height: 28px;
    }

    .categorySideBar .module-categories>.well>ul.nav li.showDropCat>a.currentActiveCategory+ul.nav {
        display: flex !important;
    }

    .categorySideBar .module-categories>.well>ul.nav li.currentParents>ul.currentParents {
        display: flex !important;
        height: auto !important;
        left: 0;
    }

    .categorySideBar .module-categories>.well>ul.nav li.hasSubCat.currentParents>ul {
        left: 0% !important;
        display: block !important;
        opacity: 1 !important;
        height: auto !important;
        padding-left: 10px;
    }
</style>

<?php
    $showHeader = temp_shop_collapse();
?>

<div class="allow-drop" rel="inherit">
    <div class="sidebar">

        <div class="sidebar__widget custom-sidebar-style categorySideBar <?php print @$showHeader['sidebar']; ?>">
            <h6><?php _lang("Kategorien", "templates/bamboo"); ?></h6>
            <hr>
            <div class="hideModuleSettings" field="cat_content" rel="content">
                <module type="shop_categories" content-id="<?php print PAGE_ID; ?>" />
            </div>
        </div>
        <?php if (get_option('enable_wishlist', 'shop')) : ?>
            <div class="sidebar__widget custom-sidebar-style">
                <h6 class=""><?php _lang("Wunschzettel"); ?></h6>
                <hr>
                <div class="sidebar-box">
                    <ul class="mw-cats-menu" id="wishlist-list">

                    </ul>
                </div>

                <?php if (is_logged()) { ?>
                <div id="wishlist-sidebar"></div>
                <p>&nbsp;</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">

                    Erstellen Sie eine neue Wunschliste
                </button>
                <?php } else { ?>
                <button data-toggle="modal" class="btn btn-primary login-modal" data-target="#loginModal">Melden Sie sich
                    an, um eine Wunschliste hinzuzufügen</button>
                <?php } ?>
            </div>
        <?php endif; ?>
        <div class="sidebar__widget custom-sidebar-style edit" field="related_products_ab" rel="inherit">
            <h6>Über uns</h6>
            <hr>
            <div class="edit" field="related_products_ab_text" rel="inherit">
                <p style="font-size:16px">
                    We're a digital focussed collective working with individuals and businesses to establish rich,
                    engaging online presences.
                </p>
            </div>
        </div>
        <div class="sidebar-content edit allow-drop" field="shop_sidebar-content" rel="content">

        </div>
    </div>
</div>


<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titel der Wunschliste</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="<?php _e('Enter wishlist title'); ?>">
                        <small id="emailHelp" class="form-text text-muted red" style="display: none;">Bitte geben Sie den Namen der Wunschliste ein</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
                <button type="button" class="btn btn-success" onclick="create_sessions()">Änderungen
                    speichern</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal" id="exampleModalCenteredit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titel der Wunschliste</label>
                        <input type="text" class="form-control" id="exampleInputEmailedit" aria-describedby="emailHelp"
                            placeholder="<?php _e('Enter wishlist title'); ?>">
                        <input type="hidden" class="form-control" id="exampleInputEmailedithide"
                            aria-describedby="emailHelp" placeholder="<?php _e('Enter wishlist title'); ?>">
                        <small id="emailHelp" class="form-text text-muted red" style="display: none;">Bitte geben Sie den Namen der Wunschliste ein</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
                <button type="button" class="btn btn-success" onclick="edit_sessions()">Änderungen speichern</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function create_sessions() {
    let title = $('#exampleInputEmail1').val();
    const emailHelp = $('#emailHelp');
    emailHelp.hide();
    if (title.trim().length > 0) {
        $.post("<?php print api_url('set_wishlist_sessions'); ?>", {
            title: title
        }, function(sessions) {
            if (sessions === 'false') {
                emailHelp.show();
            } else {
                location.reload();
            }
        });
    } else {
        emailHelp.show();
    }
}

function edit_sessions() {
    let title = $('#exampleInputEmailedit').val();
    let titlehide = $('#exampleInputEmailedithide').val();
    const emailHelp = $('#emailHelp');
    emailHelp.hide();
    if (title.trim().length > 0) {
        $.post("<?php print api_url('edit_wishlist_sessions'); ?>", {
            title: title,
            titlehide: titlehide
        }, function(sessions) {
            if (sessions === 'false') {
                emailHelp.show();
            } else {
                location.reload();
            }
        });
    } else {
        emailHelp.show();
    }
}

$(document).ready(function(){
    $.get(`<?= api_url('get_wishlist_sessions'); ?>`, result => {
        const selected = [];
        if(result!='false'){
            result.forEach(function(session) {
                $.post("<?= url('/') ?>/api/v1/wishlist_check", {
                    id: session['id']
                }, (res) => {

                    if (res.success) {
                        $("#wishlist-list").append('<li title="' + session['name'] + '"><a href="'+'<?=site_url()?>'+'shop?wishlist_id=' + session["id"] + '" data-category-id="' + session['id'] + '" title="' + session['name'] + '" class="depth-0">' + session['name'] + '</a><button type="button" id="delete_sss" class="btn" data-toggle="modal" data-name="' + session['name'] + '" ><span class="material-icons">delete</span></button><button type="button" id="edit_sss" class="btn" data-toggle="modal" data-target="#exampleModalCenteredit" data-name="' + session['name'] + '" ><span class="material-icons">create</span></button></li>');

                    } else {
                        $("#wishlist-list").append('<li title="' + session['name'] + '"><span class="depth-0">' + session['name'] + '</span><button type="button" id="delete_sss" class="btn" data-toggle="modal" data-name="' + session['name'] + '" ><span class="material-icons">delete</span></button><button type="button" id="edit_sss" class="btn" data-toggle="modal" data-target="#exampleModalCenteredit" data-name="' + session['name'] + '" ><span class="material-icons">create</span></button></li>');
                    }

                });
            });
        }
    });
});

$(document).ready(function() {

    // Get the current page URL
    var currentUrl = window.location.href;

    var parts = currentUrl.split("/");
    var url = parts[parts.length - 1];
    $('.module-categories>.well>ul.nav li a').each(function() {
    var cat_url=$(this).attr('href');


    if (cat_url.indexOf(url) !== -1) {

        $(this).addClass('currentActiveCategory');

    }
    });
});

</script>
