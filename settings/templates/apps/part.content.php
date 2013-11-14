<?php
/**
 * ownCloud - App Settings
 * @author Raghu Nayyar
 * @copyright 2013 Raghu Nayyar <raghu.nayyar.007@gmail.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
?>

<div class="appinfo">
	<h3>
		<strong><span class="name">{{ appname }}</span></strong>
		<span class="version">{{ vers }}</span>
	</h3>
	<p class="description">{{ desc }}</p>
	<p class="appslink">
		<a href="#" target="_blank">
			<?php p($l->t('See application page at apps.owncloud.com'));?>
		</a>
	</p>
	<p class="license">
		<?php
			print_unescaped($l->t('<span class="licence"></span>-licensed by <span class="author">{{ author }}</span>'));
		?>
	</p>

	<!-- TODO : Put a check for already enabled app. -->
	<button class="enable" ng-click="enable(appId)">
		<?php p($l->t('Enable')); ?>
	</button>
	
	<!-- TODO : Put a check for already enabled app. -->
	<button class="disable" ng-click="disable(appId)">
		<?php p($l->t('Disable')); ?>
	</button>
	
	<!-- TODO :  Put a chech for already updated apps. -->
	<button class="update" ng-click="update(appId)">
		<?php p($l->t('Update')); ?>
	</button>
</div>

        <h3><strong><span class="name"><?php p($l->t('Select an App'));?></span></strong><span
                class="version"></span><small class="externalapp" style="visibility:hidden;"></small></h3>
        <span class="score"></span>
        <p class="description"></p>
        <img src="" class="preview hidden" />
        <p class="appslink hidden"><a href="#" target="_blank"><?php
                p($l->t('See application page at apps.owncloud.com'));?></a></p>
        <p class="license hidden"><?php
                print_unescaped($l->t('<span class="licence"></span>-licensed by <span class="author"></span>'));?></p>
        <input class="enable hidden" type="submit" />
        <input class="update hidden" type="submit" value="<?php p($l->t('Update')); ?>" />
        <div class="warning hidden"></div>