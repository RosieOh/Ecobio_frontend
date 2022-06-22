<?php if(!defined("__XE__"))exit;?><form action="./" method="get" class="boardListForm"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <fieldset>
        <legend>List of Articles</legend>
        <table cellspacing="0" border="1" summary="List of Articles" class="boardList">
            <thead>
                <tr>
                    
                    <?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key => $__Context->val){ ?>
                    
                    <?php if($__Context->val->idx == -1){ ?>
                    
                    <?php if($__Context->val->type == 'no'){ ?>
                    <th scope="col"><?php echo $__Context->lang->no ?></th>
                    <?php }elseif($__Context->val->type == 'title'){ ?>
                    <?php if(!$__Context->module_info->title_name){ ?><th scope="col" class="title"><?php echo $__Context->lang->title ?></th><?php } ?>
                    <?php if($__Context->module_info->title_name){ ?><th scope="col" class="title"><?php echo $__Context->module_info->title_name ?></th><?php } ?>
                    <?php }elseif($__Context->val->type == 'regdate'){ ?>
                    <th scope="col"><a href="<?php echo getUrl('sort_index','regdate','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->date;
if($__Context->sort_index=='regdate'){ ?><img src="/modules/board/skins/coupon/img/common/<?php echo $__Context->order_icon ?>" alt="sort" width="5" height="3" class="sort" /><?php } ?></a></th>
                    <?php }elseif($__Context->val->type == 'last_update'){ ?>
                    <th scope="col"><a href="<?php echo getUrl('sort_index','last_update','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->last_update;
if($__Context->sort_index=='last_update'){ ?><img src="/modules/board/skins/coupon/img/common/<?php echo $__Context->order_icon ?>" alt="sort" width="5" height="3" class="sort" /><?php } ?></a></th>
                    <?php }elseif($__Context->val->type == 'nick_name'){ ?>
                    <?php if(!$__Context->module_info->writer_name){ ?><th scope="col"><?php echo $__Context->lang->writer ?></th><?php } ?>
                    <?php if($__Context->module_info->writer_name){ ?><th scope="col"><?php echo $__Context->module_info->writer_name ?></th><?php } ?>
                    <?php }elseif($__Context->val->type == 'user_id'){ ?>
                    <th scope="col"><?php echo $__Context->lang->user_id ?></th>
                    <?php }elseif($__Context->val->type == 'user_name'){ ?>
                    <th scope="col"><?php echo $__Context->lang->user_name ?></th>
                    <?php }elseif($__Context->val->type == 'readed_count'){ ?>
                    <th scope="col" class="reading"><a href="<?php echo getUrl('sort_index','readed_count','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->readed_count;
if($__Context->sort_index=='readed_count'){ ?><img src="/modules/board/skins/coupon/img/common/<?php echo $__Context->order_icon ?>" alt="sort" width="5" height="3" class="sort" /><?php } ?></a></th>
                    <?php }elseif($__Context->val->type == 'voted_count'){ ?>
                    <th scope="col"><a href="<?php echo getUrl('sort_index','voted_count','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->voted_count;
if($__Context->sort_index=='voted_count'){ ?><img src="/modules/board/skins/coupon/img/common/<?php echo $__Context->order_icon ?>" alt="sort" width="5" height="3" class="sort" /><?php } ?></a></th>
                    <?php }elseif($__Context->val->type == 'blamed_count'){ ?>
                    <th scope="col"><a href="<?php echo getUrl('sort_index','blamed_count','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->blamed_count;
if($__Context->sort_index=='blamed_count'){ ?><img src="/modules/board/skins/coupon/img/common/<?php echo $__Context->order_icon ?>" alt="sort" width="5" height="3" class="sort" /><?php } ?></a></th>
                    <?php }elseif($__Context->val->type == 'last_post'){ ?>
                    <th scope="col"><a href="<?php echo getUrl('sort_index','last_update','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->last_post;
if($__Context->sort_index=='last_update'){ ?><img src="/modules/board/skins/coupon/img/common/<?php echo $__Context->order_icon ?>" alt="sort" width="5" height="3" class="sort" /><?php } ?></a></th>
                    <?php } ?>
                    
                    <?php }else{ ?>
                    <th scope="col"><a href="<?php echo getUrl('sort_index', $__Context->val->eid, 'order_type', $__Context->order_type) ?>"><?php echo $__Context->val->name;
if($__Context->sort_index == $__Context->val->eid){ ?><img src="/modules/board/skins/coupon/img/common/<?php echo $__Context->order_icon ?>" alt="sort" width="5" height="3" class="sort" /><?php } ?></a></th>
                    <?php } ?>
                    <?php } ?>
                    <?php if($__Context->grant->manager){ ?><th scope="col" class="check"><input type="checkbox" onclick="XE.checkboxToggleAll({doClick: true}); return false;" title="Check All" /></th><?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php if(!$__Context->document_list && !$__Context->notice_list){ ?>
                <tr>
                    <td colspan="<?php if($__Context->grant->manager){;
echo count($__Context->list_config)+1;
}else{;
echo count($__Context->list_config);
} ?>">
                        <?php echo $__Context->lang->no_documents ?>
                    </td>
                </tr>
                <?php }else{ ?>
                <?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no => $__Context->document){ ?>
                <tr class="notice">
                    
                    <?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key => $__Context->val){ ?>
                    
                    <?php if($__Context->val->idx == -1){ ?>
                    
                    <?php if($__Context->val->type == 'no'){ ?>
                    <td class="notice"><?php if($__Context->document_srl == $__Context->document->document_srl){ ?>&raquo;<?php }else{;
echo $__Context->lang->notice;
} ?></td>
                    <?php }elseif($__Context->val->type == 'title'){ ?>
                    <td class="title">
                        <a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
                        <?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>								
                        <?php if($__Context->document->getCommentCount()){ ?>
                        <a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment"><span class="replyNum" title="Replies">[<?php echo $__Context->document->getCommentCount() ?>]</span></a>
                        <?php } ?>
                        <?php if($__Context->document->getTrackbackCount()){ ?>
                        <a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#trackback"><span class="trackbackNum" title="Trackbacks">[<?php echo $__Context->document->getTrackbackCount() ?>]</span></a>
                        <?php } ?>
                    </td>
                    <?php }elseif($__Context->val->type == 'regdate'){ ?>
                    <td class="date"><?php echo $__Context->document->getRegdate('Y-m-d') ?></td>
                    <?php }elseif($__Context->val->type == 'last_update'){ ?>
                    <td class="date"><?php echo zdate($__Context->document->get('last_update'),'Y-m-d H:i') ?></td>
                    <?php }elseif($__Context->val->type == 'nick_name'){ ?>
                    <td class="author"><?php echo $__Context->document->getNickName() ?></a></td>
                    <?php }elseif($__Context->val->type == 'user_id'){ ?>
                    <td class="author"><?php echo $__Context->document->getUserID() ?></a></td>
                    <?php }elseif($__Context->val->type == 'user_name'){ ?>
                    <td class="author"><?php echo $__Context->document->getUserName() ?></a></td>
                    <?php }elseif($__Context->val->type == 'readed_count'){ ?>
                    <td class="reading"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'&nbsp;' ?></td>
                    <?php }elseif($__Context->val->type == 'voted_count'){ ?>
                    <td class="recommend"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'&nbsp;' ?></td>
                    <?php }elseif($__Context->val->type == 'blamed_count'){ ?>
                    <td class="recommend"><?php echo $__Context->document->get('blamed_count')!=0?$__Context->document->get('blamed_count'):'&nbsp;' ?></td>
                    <?php }elseif($__Context->val->type == 'last_post'){ ?>
                    <td class="lastReply">
                        <?php if((int)($__Context->document->get('comment_count'))>0){ ?>
                        <a href="<?php echo $__Context->document->getPermanentUrl() ?>#comment" class="replyAnchor"><?php echo zdate($__Context->document->get('last_update'),'Y-m-d') ?> <?php echo zdate($__Context->document->get('last_update'),'H:i') ?></a>
                        <?php if($__Context->document->get('last_updater')){ ?>
                        <sub class="by">by</sub>
                        <?php echo htmlspecialchars($__Context->document->get('last_updater')) ?>
                        <?php } ?>
                        <?php }else{ ?>
                        &nbsp;
                        <?php } ?>
                    </td>
                    <?php } ?>
                    
                    <?php }else{ ?>
                    <td><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?>&nbsp;</td>
                    <?php } ?>
                    <?php } ?>
                    <?php if($__Context->grant->manager){ ?>
                    <td class="check"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check this" onclick="doAddDocumentCart(this)" <?php if($__Context->document->isCarted()){ ?>checked="checked"<?php } ?> /></td>
                    <?php } ?>
                </tr>
                <?php } ?>
                <?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->document){ ?>
                <tr class="bg<?php echo ($__Context->no+1)%2+1 ?>">
                    
                    <?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key => $__Context->val){ ?>
                    
                    <?php if($__Context->val->idx == -1){ ?>
                    
                    <?php if($__Context->val->type == 'no'){ ?>
                    <td class="num"><?php if($__Context->document_srl == $__Context->document->document_srl){ ?>&raquo;<?php }else{;
echo $__Context->no;
} ?></td>
                    <?php }elseif($__Context->val->type == 'title'){ ?>
                    <td class="title">
                        <a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getNickName();
echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
                        <?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
                        <?php if($__Context->document->getCommentCount()){ ?>
                        <a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment"><span class="replyNum" title="Replies">[<?php echo $__Context->document->getCommentCount() ?>]</span></a>
                        <?php } ?>
                        <?php if($__Context->document->getTrackbackCount()){ ?>
                        <a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#trackback"><span class="trackbackNum" title="Trackbacks">[<?php echo $__Context->document->getTrackbackCount() ?>]</span></a>
                        <?php } ?>
                    </td>
                    <?php }elseif($__Context->val->type == 'nick_name'){ ?>
                    <td class="author"><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></td>
                    <?php }elseif($__Context->val->type == 'user_id'){ ?>
                    <td class="author"><?php echo $__Context->document->getUserID() ?></a></td>
                    <?php }elseif($__Context->val->type == 'user_name'){ ?>
                    <td class="author"><?php echo $__Context->document->getUserName() ?></a></td>
                    <?php }elseif($__Context->val->type == 'regdate'){ ?>
                    <td class="date"><?php echo $__Context->document->getRegdate('Y-m-d') ?></td>
                    <?php }elseif($__Context->val->type == 'last_update'){ ?>
                    <td class="date"><?php echo zdate($__Context->document->get('last_update'),'Y-m-d H:i') ?></td>
                    <?php }elseif($__Context->val->type == 'readed_count'){ ?>
                    <td class="reading"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'&nbsp;' ?></td>
                    <?php }elseif($__Context->val->type == 'voted_count'){ ?>
                    <td class="recommend"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'&nbsp;' ?></td>
                    <?php }elseif($__Context->val->type == 'blamed_count'){ ?>
                    <td class="recommend"><?php echo $__Context->document->get('blamed_count')!=0?$__Context->document->get('blamed_count'):'&nbsp;' ?></td>
                    <?php }elseif($__Context->val->type == 'last_post'){ ?>
                    <td class="lastReply">
                        <?php if((int)($__Context->document->get('comment_count'))>0){ ?>
                        <a href="<?php echo $__Context->document->getPermanentUrl() ?>#comment" class="replyAnchor"><?php echo zdate($__Context->document->get('last_update'),'Y-m-d') ?> <?php echo zdate($__Context->document->get('last_update'),'H:i') ?></a>
                        <?php if($__Context->document->get('last_updater')){ ?>
                        <sub class="by">by</sub>
                        <?php echo htmlspecialchars($__Context->document->get('last_updater')) ?>
                        <?php } ?>
                        <?php }else{ ?>
                        &nbsp;
                        <?php } ?>
                    </td>
                    <?php } ?>
                    
                    <?php }else{ ?>
                    <td><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?>&nbsp;</td>
                    <?php } ?>
                    <?php } ?>
                    <?php if($__Context->grant->manager){ ?><td class="checkbox"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check this" onclick="doAddDocumentCart(this)" <?php if($__Context->document->isCarted()){ ?>checked="checked"<?php } ?> /></td><?php } ?>
                </tr>
                <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </fieldset>
</form>
