      <div id="turn-page">
        总计 <span id="totalRecords"><?php echo $totalRows; ?></span>
        个记录分为 <span id="totalPages"><?php echo $totalpages; ?></span>
        页
        <span id="page-link">
          <a href="<?php echo $gotoPageFirst; ?>">第一页</a>
          <a href="<?php echo $gotoPagePrev; ?>">上一页</a>
          <a href="<?php echo $gotoPageNext; ?>">下一页</a>
          <a href="<?php echo $gotoPageLast; ?>">最末页</a>
          <select id="gotoPage" name="gotoPage" onchange="javascript:gotopages();">
          <?php 
          for($p=1;$p<=$totalpages;$p=$p+1)
          {
          ?>
            <option value="<?php echo $p; ?>"<?php if($p==$page) echo 'selected="selected"'; ?>><?php echo $p; ?></option>
          <?php 
          }
          ?>
        </select>
        </span>
      </div>
