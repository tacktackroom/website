          <div class="row-products" data-class="li_p">
              <div class="container">
                  <div class="row">
                      {if isset($HOOK_HOME_TAB_CONTENT) && $HOOK_HOME_TAB_CONTENT|trim}
                          {if isset($HOOK_HOME_TAB) && $HOOK_HOME_TAB|trim}
                              <ul id="home-page-tabs" class="nav nav-tabs clearfix">
                                  {$HOOK_HOME_TAB}
                              </ul>
                          {/if}
                          <div class="tab-content"><ul class="homeproducts">{$HOOK_HOME_TAB_CONTENT}</ul></div>
                          {addJsDef comparedProductsIds=$compared_products}
                      {/if}
                  </div>
              </div>
          </div>