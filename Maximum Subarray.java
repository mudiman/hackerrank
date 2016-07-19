import java.util.Scanner;

public class Solution {

	public static void main(String[] args) {
		Scanner s = new Scanner(System.in);
		int T = s.nextInt();
		for (int i = 0; i < T; i++) {
			int count = s.nextInt();
			long maxNextCount = 0;
			long max_lst = 0;
			long max_crnt = 0;
			
			for (int j = 0; j < count; j++) {
				long num = s.nextLong();
				max_lst += num;
				if (j == 0) {
					max_crnt = max_lst;
					maxNextCount = num;
				} else {
					if (num + maxNextCount >= maxNextCount) {
						if(maxNextCount < 0)
							maxNextCount = 0;
						maxNextCount += num;
					}
					if (max_crnt < max_lst) {

						max_crnt = max_lst;
					}
					if (max_lst < 0)
						max_lst = 0;
				}

			}
			System.out.println(max_crnt + " " + maxNextCount);
		}
		s.close();
	}
}